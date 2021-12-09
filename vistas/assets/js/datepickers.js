$.datepicker.regional["es"] = {
  closeText: "Cerrar",
  prevText: "< Ant",
  nextText: "Sig >",
  currentText: "Hoy",
  monthNames: [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
  ],
  monthNamesShort: [
    "Ene",
    "Feb",
    "Mar",
    "Abr",
    "May",
    "Jun",
    "Jul",
    "Ago",
    "Sep",
    "Oct",
    "Nov",
    "Dic",
  ],
  dayNames: [
    "Domingo",
    "Lunes",
    "Martes",
    "Miércoles",
    "Jueves",
    "Viernes",
    "Sábado",
  ],
  dayNamesShort: ["Dom", "Lun", "Mar", "Mié", "Juv", "Vie", "Sáb"],
  dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"],
  weekHeader: "Sm",
  dateFormat: "d-m-y",
  firstDay: 1,
  isRTL: false,
  showMonthAfterYear: false,
  yearSuffix: "",
};
$.datepicker.setDefaults($.datepicker.regional["es"]);

$(function () {
  $("#datepickerEntrada").datepicker({
    minDate: "0D",
    maxDate: "+2M, -10D",
  });
  $(".ui-datepicker").addClass("notranslate");
});

$(function () {
  $("#datepickerSalida").datepicker({
    minDate: "0D",
    maxDate: "+2M, -10D",
  });
});

$(function () {
  $("#datepickerEntradaR").datepicker({
    minDate: "0D",
    maxDate: "+2M, -10D",
  });
  $(".ui-datepicker").addClass("notranslate");
});

$(function () {
  $("#datepickerSalidaR").datepicker({
    minDate: "0D",
    maxDate: "+2M, -10D",
  });
});

$(function () {
  $("#datepickerModal").datepicker({
    minDate: "0D",
    maxDate: "+2M, -10D",
  });
});

