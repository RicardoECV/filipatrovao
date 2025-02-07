const MOSTRARHORAS = document.querySelector(".horas");
var internalo = setInterval(showTime, 1000);

function showTime() {
  let data_actual = new Date();  

  let y = data_actual.getFullYear();
  let m = data_actual.getMonth();
  let d = data_actual.getDate();

  let horas = (data_actual.getHours()<10) ? "0" + data_actual.getHours() : data_actual.getHours() ;
  let minutos = (data_actual.getMinutes()<10) ? "0" + data_actual.getMinutes() : data_actual.getMinutes() ;
  let segundos = (data_actual.getSeconds()<10) ? "0" + data_actual.getSeconds() : data_actual.getSeconds() ;

  MOSTRARHORAS.innerHTML = `${horas}:${minutos}:${segundos} - ${d}/${m+1}/${y}`;
}