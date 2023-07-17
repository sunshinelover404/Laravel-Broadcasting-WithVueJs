<!DOCTYPE html>
<html>
<head>
    <title>Pusher Test</title>
</head>
<body>
   
    <div id="app">
      
        <h1>Pusher Test</h1>
        <p>
            
            Publish an event to channel <code>my-channel</code> with event name <code>my-event</code>; it will appear below:
        </p>
        <ul>
            {{-- <li v-for="message in messages">
                {{ message }}
            </li> --}}
        </ul>
    </div>  

    @vite('resources/js/broadcast.js')

   
</body>
</html>
