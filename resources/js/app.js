// import './bootstrap';

// Echo.private('admin-notification' + userId)
//     .notification((notification) => {

//         console.log('send notify success');
//         toastr.success(notification.data)

// });


import './bootstrap';

Echo.private('App.Models.User.' + userId)
    .notification((notification) => {
        toastr.success(notification.data)
    });
