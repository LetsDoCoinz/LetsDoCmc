<?php

//config
$exchanges = [
    'LetsDoCoinz' => [
        'ticker_mc'=>'ticker',
        'color' => '#007bff',
        'ticker_url' => 'http://api.letsdocoinz.com/ticker',
    ],
    'DarkCoinz'   => [
        'ticker_mc'=>'ticker_dark',
        'color' => '#111111',
        'ticker_url' => 'http://api.darkcoinz.com/ticker',
    ],
];

//calc volume btc on exchange of 24 h every hour



function calc_vol_now($exchange_code,$exchange_ticker_name,&$stats_by_pair){

//    $m = new Memcached();
//    $m->addServer('localhost', 11211);
//    $ticker = $m->get($exchange_ticker_name);

    $ticker = file_get_contents($exchange_ticker_name);




    if(!empty($ticker)) {
        $ticker = json_decode($ticker, 1);

        echo "Exchange: $exchange_ticker_name Pairs: " . sizeof($ticker) . "\n";


        $btc_price = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice/BTC.json');
        $btc_price = json_decode($btc_price);

        $pairs_number = 0;
        $volume_btc_total = 0;
        $volume_usd_total = 0;


        foreach ($ticker as $pair) {

            $pairs_number++;

            if ($pair['cur2_id'] == 1) {
                $pair['volume_btc'] = $pair['volume'] * $pair['last'];
                $volume_btc_total += $pair['volume_btc'];
                $pair['volume_usd'] = $pair['volume_btc'] * $btc_price->bpi->USD->rate_float;
                $volume_usd_total += $pair['volume_usd'];

                //if($volume_by_pair[])
                if(!isset($stats_by_pair[$pair['symbol']])){
                    $stats_by_pair[$pair['symbol']]=[
                        'btc'=>$pair['volume_btc'],
                        'usd'=>$pair['volume_usd'],
                        'price'=>$pair['last'],
                        //'price_min'=>$pair['price_min'],
                        //'price_max'=>$pair['price_max'],
                    ];
                } else {
                    $stats_by_pair[$pair['symbol']]['btc']+=$pair['volume_btc'];
                    $stats_by_pair[$pair['symbol']]['usd']+=$pair['volume_usd'];
                    $stats_by_pair[$pair['symbol']]['price']= ($stats_by_pair[$pair['symbol']]['price'] + $pair['last'])/2;
                    //$stats_by_pair[$pair['symbol']]['price_min']= ($stats_by_pair[$pair['symbol']]['price_min'] + $pair['price_min'])/2;
                    //$stats_by_pair[$pair['symbol']]['price_max']= ($stats_by_pair[$pair['symbol']]['price_max'] + $pair['price_max'])/2;

                }


            }
//            else {
//                $pair['volume_btc'] = 0;
//                $pair['volume_usd'] = 0;
//            }




        }

        echo "pairs_number: $pairs_number \n";
        echo "volume_btc_total: $volume_btc_total \n";
        echo "volume_usd_total: $volume_usd_total \n";

        return [
            'pairs_number' => $pairs_number,
            'volume_btc_total'=>$volume_btc_total,
            'volume_usd_total'=>$volume_usd_total,
            ];

    } else {
        echo "Exchange: $exchange_ticker_name Pairs: 0 \n";
        return [];

    }



}

//store in db



//calc_vol_now('LetsDoCoinz','ticker');
//calc_vol_now('DarkCoinz','ticker_dark');
$total_btc = 0;
$total_usd = 0;

$stats_by_pair = [];
foreach ($exchanges as $key => $exchange){

    $r = calc_vol_now($key,$exchange['ticker_url'],$stats_by_pair);
    $exchanges[$key] = array_merge($exchanges[$key],$r);
    $total_btc += $exchanges[$key]['volume_btc_total'];
    $total_usd += $exchanges[$key]['volume_usd_total'];

}
print_r($exchanges);




echo "total_btc: $total_btc total_usd: $total_usd\n";

file_put_contents(__DIR__.'/../data/exchanges.json',json_encode($exchanges));

//build graph in file
$exchanges_graph = file_get_contents(__DIR__.'/../data/exchanges_volume_graph.json');
if(empty($exchanges_graph)){
    $exchanges_graph = [];
} else {
    $exchanges_graph = json_decode($exchanges_graph,1);
}



echo "exchanges_volume_graph size before clean: ".sizeof($exchanges_graph)."\n";
//print_r($exchanges_graph);
if(sizeof($exchanges_graph)>16){
    array_shift($exchanges_graph);
}
if(sizeof($exchanges_graph)>16){
    array_shift($exchanges_graph);
}
echo "exchanges_volume_graph size after clean: ".sizeof($exchanges_graph)."\n";

//print_r();

$date = date("Y-m-d H:i:00");

//if(empty($exchanges_graph[$date])){
//
//}
$exchanges_graph[$date]['btc'] =  $total_btc;
$exchanges_graph[$date]['usd'] =  $total_usd;

$exchanges_graph = file_put_contents(__DIR__.'/../data/exchanges_volume_graph.json',json_encode($exchanges_graph));

//print_r($exchanges_graph);




file_put_contents(__DIR__.'/../data/coins_stats.json',json_encode($stats_by_pair));
//print_r($stats_by_pair);



if(empty($exchanges_graph)){
    $exchanges_graph = [];
} else {
    $exchanges_graph = json_decode($exchanges_graph,1);
}
foreach ($stats_by_pair as $key => $stats_by_pai){

    $coins_graph = file_get_contents(__DIR__.'/../data/coin_graph_'.$key.'.json');
    if(empty($coins_graph)){
        $coins_graph = [];
    } else {
        $coins_graph = json_decode($coins_graph,1);
    }

    echo "coin_graph_$key size before clean: ".sizeof($coins_graph)."\n";
    //print_r($exchanges_graph);
    if(sizeof($coins_graph)>16){
        array_shift($coins_graph);
    }
    if(sizeof($coins_graph)>16){
        array_shift($coins_graph);
    }
    echo "coin_graph_$key size before clean: ".sizeof($coins_graph)."\n";



    $coins_graph[$date] = $stats_by_pai;
    file_put_contents(__DIR__.'/../data/coin_graph_'.$key.'.json',json_encode($coins_graph));
    
}



