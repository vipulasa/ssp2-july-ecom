import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);


Alpine.directive('analytic-hit', (el, { value, modifiers, expression }, { Alpine, effect, cleanup }) => {

    console.log(el, value, modifiers, expression);

    // check if the button is clicked
    el.addEventListener('click', () => {
        // make a hit to /analytics/{model}/{id}/{action}
        axios.post('/api/analytics/' + value + '/' + expression + '/' + modifiers[0]).then(response => {
           console.log(response.data);
        });
    });

});

Alpine.data('_app', () => (window._app))

Alpine.start();

