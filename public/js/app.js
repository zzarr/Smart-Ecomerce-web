'use strict';

/* ===== Enable Bootstrap Popover (on element  ====== */
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

/* ==== Enable Bootstrap Alert ====== */
//var alertList = document.querySelectorAll('.alert')
//alertList.forEach(function (alert) {
//  new bootstrap.Alert(alert)
//});

const alertList = document.querySelectorAll('.alert')
const alerts = [...alertList].map(element => new bootstrap.Alert(element))


/* ===== Responsive Sidepanel ====== */
const sidePanelToggler = document.getElementById('sidepanel-toggler'); 
const sidePanel = document.getElementById('app-sidepanel');  
const sidePanelDrop = document.getElementById('sidepanel-drop'); 
const sidePanelClose = document.getElementById('sidepanel-close'); 

window.addEventListener('load', function(){
	responsiveSidePanel(); 
});

window.addEventListener('resize', function(){
	responsiveSidePanel(); 
});


function responsiveSidePanel() {
    let w = window.innerWidth;
	if(w >= 1200) {
	    // if larger 
	    //console.log('larger');
		sidePanel.classList.remove('sidepanel-hidden');
		sidePanel.classList.add('sidepanel-visible');
		
	} else {
	    // if smaller
	    //console.log('smaller');
	    sidePanel.classList.remove('sidepanel-visible');
		sidePanel.classList.add('sidepanel-hidden');
	}
};

sidePanelToggler.addEventListener('click', () => {
	if (sidePanel.classList.contains('sidepanel-visible')) {
		console.log('visible');
		sidePanel.classList.remove('sidepanel-visible');
		sidePanel.classList.add('sidepanel-hidden');
		
	} else {
		console.log('hidden');
		sidePanel.classList.remove('sidepanel-hidden');
		sidePanel.classList.add('sidepanel-visible');
	}
});



sidePanelClose.addEventListener('click', (e) => {
	e.preventDefault();
	sidePanelToggler.click();
});

sidePanelDrop.addEventListener('click', (e) => {
	sidePanelToggler.click();
});



/* ====== Mobile search ======= */
const searchMobileTrigger = document.querySelector('.search-mobile-trigger');
const searchBox = document.querySelector('.app-search-box');

searchMobileTrigger.addEventListener('click', () => {

	searchBox.classList.toggle('is-visible');
	
	let searchMobileTriggerIcon = document.querySelector('.search-mobile-trigger-icon');
	
	if(searchMobileTriggerIcon.classList.contains('fa-magnifying-glass')) {
		searchMobileTriggerIcon.classList.remove('fa-magnifying-glass');
		searchMobileTriggerIcon.classList.add('fa-xmark');
	} else {
		searchMobileTriggerIcon.classList.remove('fa-xmark');
		searchMobileTriggerIcon.classList.add('fa-magnifying-glass');
	}
	
		
	
});

function windowScroll(){var e=document.getElementById("navbar-custom");50<=document.body.scrollTop||50<=document.documentElement.scrollTop?e?.classList.add("nav-sticky"):e?.classList.remove("nav-sticky")}feather.replace(),window.addEventListener("scroll",e=>{e.preventDefault(),windowScroll()});var triggerTabList=[].slice.call(document.querySelectorAll("#tab-menu a")),collapses=(triggerTabList.forEach(function(e){var t=new bootstrap.Tab(e);e.addEventListener("click",function(e){e.preventDefault(),t.show(),document.body.classList.remove("enlarge-menu")})}),document.querySelectorAll(".navbar-nav .collapse"));collapses.forEach(t=>{var a=new bootstrap.Collapse(t,{toggle:!1});t.addEventListener("show.bs.collapse",e=>{e.stopPropagation();e=t.parentElement.closest(".collapse");null!=e&&e.querySelectorAll(".collapse").forEach(e=>{e=bootstrap.Collapse.getInstance(e);e!==a&&e.hide()})}),t.addEventListener("hide.bs.collapse",e=>{e.stopPropagation(),t.querySelectorAll(".collapse").forEach(e=>{bootstrap.Collapse.getInstance(e).hide()})})});try{document.getElementById("togglemenu").addEventListener("click",function(e){e.preventDefault(),document.body.classList.toggle("enlarge-menu")})}catch(e){}window.screen.width<1025?document.getElementsByTagName("body")[0].classList.add("enlarge-menu","enlarge-menu-all"):window.screen.width<1340&&(document.getElementsByTagName("body")[0].classList.remove("enlarge-menu-all"),document.getElementsByTagName("body")[0].classList.add("enlarge-menu")),window.addEventListener("resize",function(){window.screen.width<1025?document.getElementsByTagName("body")[0].classList.add("enlarge-menu","enlarge-menu-all"):window.screen.width<1340&&(document.getElementsByTagName("body")[0].classList.remove("enlarge-menu-all"),document.getElementsByTagName("body")[0].classList.add("enlarge-menu"))}),document.querySelectorAll(".leftbar-tab-menu a").forEach(function(e,t){var a,n,o=window.location.href.split(/[?#]/)[0];e.href==o&&(e.classList.add("active"),e.parentElement.parentElement.classList.contains("navbar-nav")||(o=e.closest(".collapse"))&&(o.classList.add("show"),(a=o.parentElement.querySelector("a")).classList.remove("collapsed"),a.setAttribute("aria-expanded","true"),(a=o.parentElement.closest(".collapse"))&&(a.classList.add("show"),a.parentElement.querySelector("a").classList.remove("collapsed"),a.parentElement.childNodes[1].setAttribute("aria-expanded","true"))),(n=e.closest(".tab-pane"))&&(n.classList.add("active"),document.querySelectorAll("a").forEach(function(e,t){e.href.includes(n.id)&&e.classList.add("active")})))});var tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')),tooltipList=tooltipTriggerList.map(function(e){return new bootstrap.Tooltip(e)}),dropdowns=document.querySelectorAll(".dropup, .dropend, .dropdown, .dropstart"),events=["click"];function toggleDropdown(e,t){var a,n=t.closest(".dropdown-menu");n&&(e.preventDefault(),e.stopPropagation(),a=t.querySelector(".dropdown-menu"),e=n.querySelectorAll(".dropdown-menu"),[].forEach.call(e,function(e){e!==a&&e.classList.remove("show")}),a.classList.add("show"))}function hideDropdowns(e){e=e.querySelector(".dropdown-menu").querySelectorAll(".dropdown-menu");e&&[].forEach.call(e,function(e){e.classList.remove("show")})}function toggleMenu(){document.getElementById("mobileToggle").classList.toggle("open");var e=document.getElementById("navigation");"block"===e.style.display?e.style.display="none":e.style.display="block"}function activateMenu(){var e=document.getElementsByClassName("sub-menu-item");if(e){for(var t,a,n=null,o=0;o<e.length;o++)e[o].href===window.location.href&&(n=e[o]);n&&(n.classList.add("active"),(t=getClosest(n,"li"))&&t.classList.add("active"),(t=getClosest(n,".parent-menu-item"))?(t.classList.add("active"),(a=t.querySelector(".menu-item"))&&a.classList.add("active"),(a=getClosest(t,".parent-parent-menu-item"))&&a.classList.add("active")):(a=getClosest(n,".parent-parent-menu-item"))&&a.classList.add("active"))}}[].forEach.call(dropdowns,function(t){var e=t.querySelector('[data-bs-toggle="dropdown"]');e?e.addEventListener(events[0],function(e){toggleDropdown(e,t)}):hideDropdowns(t)}),document.querySelectorAll(".menu-body a").forEach(function(e,t){var a=window.location.href.split(/[?#]/)[0];const n=e;e.href==a&&(n.classList.add("active"),n.parentNode.classList.add("menuitem-active"),n.parentNode.querySelector(".nav-link")?.setAttribute("aria-expanded","true"),n.parentNode.parentNode.parentNode.classList.add("show"),n.parentNode.parentNode.parentNode.parentNode.classList.add("menuitem-active"),n.parentNode.parentNode.parentNode.parentNode.querySelector(".nav-link")?.setAttribute("aria-expanded","true"),"sidebar-menu"!==(e=n.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode).getAttribute("id")&&e.classList.add("show"),n.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add("menuitem-active"),n.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(".nav-link")?.setAttribute("aria-expanded","true"),(a=n.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode)&&a instanceof HTMLElement&&"wrapper"!==a.getAttribute("id")&&a.classList.add("show"),(e=(e=n.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode)&&e.parentNode)&&e.classList.add("menuitem-active"))}),document.querySelectorAll("#navigation").length&&(document.querySelectorAll("#navigation li a").forEach(function(e,t){var a=window.location.href.split(/[?#]/)[0];if(e.href==a){const r=e;r.classList.add("active");for(var n=r.getAttribute("aria-labelledby");;){var o=document.querySelector("#"+n);if(o?.classList.add("active"),n=o?.getAttribute("aria-labelledby"),o?.setAttribute("aria-expanded","true"),!n)break}r.parentNode.parentNode.classList.add("active"),r.parentNode.parentNode.parentElement.querySelector(".nav-link")?.classList.add("active"),r.parentNode.parentNode.parentNode.parentNode.classList.add("active"),r.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add("active")}}),document.querySelector(".navbar-toggle").addEventListener("click",function(e){e.target.classList.toggle("open")}));
