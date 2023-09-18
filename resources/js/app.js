import Echo from 'laravel-echo';
import './bootstrap';



window.Echo.private('admin-notification')
   .listen('.classwork-created', function(event) {
      alert(event.title);
   });
