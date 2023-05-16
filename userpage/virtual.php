<!DOCTYPE html>
<html>
<head>
    <title>Painting Service with Augmented Reality</title>
    <style>
        #video {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <video id="video" autoplay></video>
    <canvas id="canvas" style="display: none;"></canvas>
    <button id="captureBtn">Capture</button>

    <script>
        // Get video element
        const video = document.getElementById('video');

        // Get canvas element
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        // Get capture button
        const captureBtn = document.getElementById('captureBtn');

        // Get user media (webcam) and display video stream
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.error('Error accessing webcam:', error);
            });

        // Capture button click event handler
        captureBtn.addEventListener('click', function () {
            // Draw the current video frame onto the canvas
            ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

            // Convert the canvas image to data URL
            const imageDataURL = canvas.toDataURL();

            // Send the captured image data URL to the server for further processing
            // You can use AJAX or form submission to send the data to a PHP script
            // Example: sendDataToServer(imageDataURL);
        });
    </script>
</body>
</html>