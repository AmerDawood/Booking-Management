<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/






Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Broadcast::channel('admin-notifications', function ($user) {
//     // Check if the user is an admin
//     if ($user instanceof Admin) {
//         return true;
//     }
//     return false;
// });

// Broadcast::channel('App.Models.Admin.{userId}', function ($user, $userId) {
//     // Check if the user is an admin and if their ID matches the channel ID
//     // if ($user instanceof Admin && (int) $user->id === (int) $userId) {
//     //     return ['id' => $user->id, 'name' => $user->name];
//     // }
//     // return null;
//     return (int) $user->id === (int) $userId;
// });

