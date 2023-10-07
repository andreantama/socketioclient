<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <script src="socket.io.js"></script>
    <script>
      const socket = io('http://localhost:3000', {
        reconnection: true, // Mengaktifkan fitur reconnect
        reconnectionAttempts: Infinity, // Jumlah percobaan reconnect yang tak terbatas
        reconnectionDelay: 1000, // Waktu tunda antara setiap percobaan reconnect (dalam milidetik)
        reconnectionDelayMax: 5000, // Waktu tunda maksimum antara percobaan reconnect (dalam milidetik)
        transports: ['polling'],
        autoConnect: true,
      });

      socket.emit('subscribe', 'antrian');
      socket.on('connect', () => {
        console.log('Terhubung ke server');
      });
      socket.on('disconnect', () => {
        console.log('Pedot ke server');
      });
    </script>
</body>
</html>