

// import './bootstrap';

// Echo.private('admin-notification')
//     .notification((notification) => {
//         toastr.success(notification.data)
//     });
import './bootstrap'; // Import your Bootstrap file or other necessary dependencies


// Listen for notifications on the 'admin-notification' channel
window.Echo.private('App.Models.Admin.' + userId)
    .notification((notification) => {
        // Display the notification using Toastr
        console.log('notification success');
        // toastr.success(notification.data);
    });


