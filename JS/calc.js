var priceSigarets = 40;   //цена за пачку
var kol_v_pachke = 20;   //кол-во сигарет в пачке
var sig_v_den = 10;   //сиг-т в день

var pachek_v_mes = sig_v_den * 30 / kol_v_pachke;   //кол-во пачек в месяц

var kolSigVmes = 30 * sig_v_den;   //кол-во сиг-т в месяц

var papados = priceSigarets * pachek_v_mes;   //стоимость яда в месяц

console.log(papados)
