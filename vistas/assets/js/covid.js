function collapseDrawer_create() {
    var header = document.querySelector('header');
    var node = document.createElement("div");
    // <div class="style1"><div class="container"><div class="row"><aside class="draw-text"><div class="text-center"><div class="texto-faja-gris"><div class="main_banner_txt"><span style="color:#fff">Reserva flexible.</span> Sabemos que debido al <span style="font-weight: 400">COVID-19</span> tus planes pueden cambiar, es por eso que te ayudamos con:</div><div class="flx_elm_obj"><div><div class="servicios-extra-elm"><div class="servicios-extra-icon_ban"></div><div class="extra_obj_txt">Cancelación gratuita hasta 72 horas antes y cambio de fecha sin cargo. <span class="disableBodyScroll" ontouchstart="" onmousedown="covid_mr()">Ver condiciones</span></div></div></div></div></div></div></aside></div></div><div class="drawer-link"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseDrawer" onclick="setTimeout(function () {collapseDrawer()}, 300);"><div></div></a></div></div>
   var html = '';
    node.id = 'collapseDrawer';
    node.className = 'top-drawer oe-reflect oe-reflect-bg panel-collapse collapse in';
    node.setAttribute('style', 'position: relative');
    node.innerHTML = html;
    header.prepend(node);

    setTimeout(function () {
        var script = 'function collapseDrawer() { var collapseDrawer = document.getElementById("collapseDrawer"); var header_tp = document.querySelector("header"); var header = document.querySelector(".oe-header"); header.style.marginTop = collapseDrawer.scrollHeight + "px"; observer = new MutationObserver(mCallback); function mCallback(mutations) { for (let mutation of mutations) { if (mutation.type === "attributes" && mutation.attributeName === "class") {if (header_tp.classList.contains("header-sticky")) { header.style.marginTop = ""; } else { header.style.marginTop = collapseDrawer.scrollHeight + "px"; } } } } observer.observe(header_tp, { attributes: true, }); }'
        var node_script = document.createElement("script");

        var collapseDrawer_el = document.getElementById("collapseDrawer");
        var header_cl = document.querySelector(".oe-header");

        node_script.innerHTML = script;
        document.querySelector('#collapseDrawer').appendChild(node_script);

        collapseDrawer();
        if (header.classList.contains("header-sticky")) {
            header_cl.style.marginTop = "";
        }
        else {
            header_cl.style.marginTop = collapseDrawer_el.scrollHeight + "px";
        }
    }, 50);
}

function downloadJSAtOnload_op_hm() {
    var html = '<div class="modal_op_elm" onclick="event.stopPropagation()"> <div class="modal_op_close map-lugar-encuentro-icon" ontouchstart=""></div> <div class="modal-base"> <div class="modal_header_base"> <div id="modal_header_title" class="modal_header_title"> </div> </div> <div class="scrollTarget_modal_op"> </div> </div> </div>'
    var node = document.createElement("div");
    node.innerHTML = html;
    node.id = 'op_modal_base';
    node.setAttribute('ontouchstart', '');
    document.querySelector('body').appendChild(node);

    var element = document.createElement("script");
    element.id = "op_modal_base_script";
    element.src = "https://s3-sa-east-1.amazonaws.com/patagoniachic.com/assets/op_modal.js";
    document.body.appendChild(element);

    var loading_ring = document.querySelectorAll('.loading-ring-img_op_d');
    if (loading_ring.length > 0) {
        for (var i = 0; i < loading_ring.length; i++) {
            loading_ring[i].style.display = 'none';
        }
    }

    var link = document.querySelectorAll('.disableBodyScroll');
    for (var l = 0; l < link.length; l++) {
        link[l].classList.add('active');
    }
}

function covid_mr() {
    document.querySelector('#op_modal_base .modal_op_elm').style.maxWidth = "570px";
    var title = document.querySelector('#modal_header_title');
    var content = document.querySelector('#op_modal_base .scrollTarget_modal_op');

    title.innerHTML = 'Reserva flexible';
    content.insertAdjacentHTML('afterbegin', '<div class="modal_op_menu_info_elm modal_op_up_txt">Sabemos que el COVID-19 presenta desafíos únicos, incluso con la planificación de tu viaje. Con el objetivo de ayudarte, hemos facilitado los siguientes recursos para que reservar una excursión sea una experiencia fácil y sin complicaciones ante futuros cambios en tus planes.</div><div class="modal_menu_item"><div class="menu_title"><div class="servicios-extra-icon_ban"></div>Cancelación gratuita hasta 72 horas antes del inicio de la excursión</div><div class="menu_txt">Podrás cancelar tu reserva sin cargo hasta 3 días antes (72 horas) de la fecha de inicio de la excursión. Se realizará el reintegro del monto total pagado.</div></div><div class="modal_menu_item"><div class="menu_title"><div class="servicios-extra-icon_ban"></div>Cambio de fecha sin cargo</div><div class="menu_txt">Al solicitar un cambio de fecha, no se cobrará penalidad. El cambio de fecha podrá solicitarse hasta 72 horas antes del inicio de la excursión. En el caso de que la nueva fecha solicitada tenga una tarifa diferente, sólo deberás abonar la diferencia de precio.</div></div><div class="modal_menu_item"><div class="menu_title"><div class="servicios-extra-icon_ban"></div>Cuando lo necesites, aquí estaremos</div><div class="menu_txt">Entendemos los desafíos únicos que se pueden presentar por lo que estamos a tu disposición para ayudarte y asesorarte ante cualquier cambio que necesites en tus reservas.</div></div><div class="modal_op_menu_info_block"><div class="modal_op_menu_info_elm">Términos y condiciones completos ingresando <a href="/terminos-y-condiciones/" target="_blank" style="color: #0090e0; font-weight: 400; white-space: nowrap; font-family: Muli,Helvetica,Arial,sans-serif; padding-left: 4px;">aquí<span class="aria-extra"></span></a></div></div>');
}
