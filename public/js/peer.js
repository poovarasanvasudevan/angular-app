/**
 * Created by poovarasanv on 3/10/16.
 */
var peer = new Peer(USER_ID, {
    host: 'localhost',
    port: 9000,
    key:'peerjs',
    path: '/'
});

peer.on('open', function(conn) {
    console.log("Connected : " + conn);
});

peer.on('close', function() {
    console.log("Connected Closed : ");
});