
<style>


body {
    background-color: black;
}

.loader {
          position: relative;
          width: 120px;
          height: 90px;
          margin: 0 auto;
          left: 300px;
          top: 400px;
        }
        .loader:before {
          content: "";
          position: absolute;
          bottom: 30px;
          left: 20px;
          height: 30px;
          width: 30px;
          border-radius: 50%;
          background: #FF3D00;
          animation: loading-bounce 0.5s ease-in-out infinite alternate;
        }
        .loader:after {
          content: "";
          position: absolute;
          right: 0;
          top: 60;
          height: 7px;
          width: 45px;
          border-radius: 4px;
          box-shadow: 0 5px 0 #fff, -35px 50px 0 #fff, -70px 95px 0 #fff;
          animation: loading-step 1s ease-in-out infinite;
        }

        @keyframes loading-bounce {
          0% { transform: scale(1, 0.7)}
          40% { transform: scale(0.8, 1.2)}
          60% { transform: scale(1, 1)}
          100% { bottom: 140px }
        }
        @keyframes loading-step {
          0% {
            box-shadow: 0 10px 0 rgba(0,0,0,0),
                        0 10px 0 #fff,
                      -35px 50px 0 #fff,
                      -70px 90px 0 #fff;
          }
          100% {
            box-shadow: 0 10px 0 #fff,
                      -35px 50px 0 #fff,
                      -70px 90px 0 #fff,
                      -70px 90px 0 rgba(0,0,0,0);
          }
        }


</style>
<span class="loader"></span>