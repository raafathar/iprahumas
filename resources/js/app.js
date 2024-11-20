import './bootstrap';
import 'laravel-datatables-vite';

import Alpine from 'alpinejs'
import select2 from "select2"
import jquery from "jquery"

window.Alpine = Alpine;
window.select2 = select2;
window.$ = jquery;

Alpine.start();
