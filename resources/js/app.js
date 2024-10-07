import "bootstrap";
import $ from "jquery";
import AOS from "aos";
import "aos/dist/aos.css";

window.$ = window.jQuery = $;
AOS.init({
    duration: 1200,
    easing: "ease-in-out",
    once: true,
});
