import './bootstrap';
import { Datepicker, Dropdown, Collapse, Modal, Ripple, Carousel, Input, Select, initTE } from "tw-elements";
initTE({ Datepicker, Dropdown, Collapse, Modal, Input, Select, Carousel, Ripple });

// Initialization for ES Users

import Alpine from 'alpinejs';
import Client from "@googlemaps/google-maps-services-js";
window.Client = Client;
window.Alpine = Alpine;
Alpine.start()