const express = require('express');
const http = require('http');
const { connect } = require('http2');
const socketIo = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

// Serve static files from the 'public' directory
app.use(express.static('./public'));
all_rooms=[]
const rooms=[]
// Socket.IO connection handling
io.on('connection', (socket) => {
  console.log('A user connected');
  socket.on('join room', (data) => {
    console.log(data,all_rooms)
    if (all_rooms.includes(parseInt(data[0]))) {
      socket.join(data[0]);
      console.log(`User joined room: ${data[0]}`);
      socket.emit('connect to the game',data)
    }
    
  });
  
  socket.on('join to room for waiting', (room) => {
      socket.join(room);
  });
  socket.on('create room', (got_data) => {
    room_number=Math.floor(Math.random() * 100001);
    for (let index = 0; index < 99; index++) {
      if (room_number in all_rooms) {
        room_number=Math.floor(Math.random() * 101);
      }else{
        all_rooms.push(room_number)
        break;
      }
    }
    got_data.push(room_number)
    socket.emit('connect to the game and send admin_username', got_data);
    socket.join(room_number);
    console.log(`Created room: ${room_number}`);
  });

  socket.on('chat message', (msg, room) => {
    io.to(room).emit('chat message', msg);
  });

  socket.on('disconnect', () => {
    console.log('User disconnected');
  });
  
  socket.on('join room for test', (room) => {
    socket.join(room);
    if (!rooms[room]) {
        rooms[room] = { cameraState: { position: [0, 0, 5], rotation: [0, 0, 0] } };
    }
    socket.emit("animate")
    socket.emit('initialCameraState', rooms[room].cameraState);
  });
  socket.on('updateCameraState', (cameraState, room) => {
    rooms[room].cameraState = cameraState;
    socket.to(room).emit('cameraStateUpdate', cameraState);
});
});

const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
