//switch: if

// let color = prompt('Введите цвет','');
//
// if(color == 'red') {
//     document.write("<div style='background-color: red;'>красный</div> <div style='background-color: black;'>чёрный</div>");
// } else if (color == 'black') {
//     document.write("<div style='background-color: black;'>чёрный</div>");
// } else if(color == 'blue') {
//     document.write("<div style='background-color: blue;'>синий</div><div style='background-color: green;'>зелёный</div>" );
// } else if(color == 'green') {
//     document.write("<div style='background-color: green;'>зелёный</div>");
// } else {
//  document.write("<div style='background-color: gray;'>Я не понял</div>");
//
// }

// prompt: or

// let age = +prompt("Сколько Вам лет?");
// let years
//
// if(age == 0 || age == false) {
//     alert('Действие отменено')
// }
// else { years = 2020 - age
//     alert('Вы родились в ' + years + ' году')
// }

// confirm: or this days

// let shop = confirm('Пошопимся?');
// (shop == true) ? (document.location = "https://rozetka.com.ua/?gclid=EAIaIQobChMImICMmuih5wIVlMmyCh3QfwftEAAYASAAEgJJb_D_BwE") : (alert('Ты бяка'))
//


// confirm:  if this day

// let shop = confirm('Пошопимся?')
//
// if (shop == true) {
//     document.location = "https://rozetka.com.ua/?gclid=EAIaIQobChMImICMmuih5wIVlMmyCh3QfwftEAAYASAAEgJJb_D_BwE"
// } if(shop == false) {
//     alert('Ты бяка')
// }


// triple prompt

// let surname = prompt('Фамилия');
// let name = prompt('Имя');
// let father_name = prompt('Отчество');
//

// alert(surname + ' ' + name  + ' ' + father_name);


// default: or

// let surname = prompt('Фамилия') || 'petrov'
// let name = prompt('Имя') || 'petya'
// let father_name = prompt('Отчество') || 'petrovich'
//
// alert(surname + ' ' + name  + ' ' + father_name);


// default: if

// let surname = prompt('Фамилия','');
// let name = prompt('Имя', '');
// let father_name = prompt('Отчество', '') ;
//
// if (surname == null || surname == false) {
//     surname = 'petrov'
// } if (name == null || name == false) {
//     name = 'petya'
// } if (father_name == null || father_name == false) {
//     father_name = 'petrovich'
// }
// alert(surname + ' ' + name  + ' ' + father_name);



// currency calc

// let val = prompt('Выберете валюту: usd или eur');
// let sum = prompt('Сумма','');
//    switch (val) {
//        case 'usd': alert(sum / 24);
//            break;
//        case 'eur': alert(sum / 28);
//            break;
//        default: alert('Хай щастить');
//            break;
//
//    }

// currency calc: improved

// let val = prompt('Выберете валюту: usd или eur');
// let sum = prompt('Сумма','');
// switch (val.toLowerCase()) {
//     case 'usd': alert(sum / 24);
//         break;
//     case 'eur': alert(sum / 28);
//         break;
//     default: alert('Хай щастить');
//         break;
//
// }

// currency calc: two rates

// let vopros = confirm('Купить валюту?');
// let val = prompt('Выберете валюту: usd или eur');
// let sum = prompt('Сумма','');
//
// switch (val.toLowerCase()) {
//     case 'usd': alert((vopros) ? sum / 24 : sum / 23);
//         break;
//     case 'eur': alert((vopros) ? sum / 28 : sum / 29);
//         break;
//     default: alert('Хай щастить');
//         break;
//
// }



// scissors

let rand = Math.random();
if (rand < 0.34) rand = "камень";
else if (rand <=0.67) rand = "ножници"
else rand = "бумага"

let user = prompt("Введите камень,ножницы или бумага");
document.write("Ваш выбор " + user + "Выбор комп " + rand  )

if (rand === user){ alert("Ничья")}
else if (user === "камень" && rand === "ножници") {alert("ВЫ выиграли")}
else if (user === "камень" && rand === "бумага") {alert("ВЫ проиграли")}

else if (user === "бумага" && rand === "ножници") {alert("ВЫ проиграли")}
else if (user === "бумага" && rand === "камень") {alert("ВЫ выиграли")}

else if (user === "ножницы" && rand === "бумага") {alert("ВЫ выиграли")}
else if (user === "ножницы" && rand === "камень") {alert("ВЫ проиграли")}


