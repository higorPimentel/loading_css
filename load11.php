<span class="loader"></span>

<style>
    body {
        background-color:gray;
    }    

    .loader {
  width: 154px !important;
  height: 54px;
  position: relative;
  border-radius: 4px;
  background-color: #fff;
  background-image:
    radial-gradient(circle 5px , #FF3D00 100%, transparent 0),
    radial-gradient(circle 5px , #FF3D00 100%, transparent 0),
    radial-gradient(circle 5px , #FF3D00 100%, transparent 0),
    radial-gradient(circle 5px , #FF3D00 100%, transparent 0),
    radial-gradient(circle 5px , #FF3D00 100%, transparent 0),
    radial-gradient(circle 5px , #FF3D00 100%, transparent 0);
    background-repeat: no-repeat;
  animation: move 4s linear infinite , rotate 2s linear infinite;
  border:solid 2px white;
  margin-left:100px !important;
  top:100px !important;
  
}

@keyframes rotate {
  0% , 20%{ transform: rotate(0deg)}
  30% , 40% { transform: rotate(90deg)}
  50% , 60% { transform: rotate(180deg)}
  70% , 80% { transform: rotate(270deg)}
  90%,  100% { transform: rotate(360deg)}
}
@keyframes move {
  0% ,  9%{
      background-position:
      -12px -15px,  -12px 0px, -12px 15px,
      12px -15px,  12px 0px,  12px 15px;
  }
  10% , 25%{
      background-position:
      0px -15px,  -12px 0px, -12px 15px,
      34px -15px,  12px 0px,  12px 15px;
  }
  30% , 45%{
      background-position:
      0px -34px, -12px -10px, -12px 12px,
      34px -15px, 12px -10px, 12px 12px;
  }
  50% , 65% {
      background-position:
      0px -34px, -12px -34px, -12px 12px,
      34px -12px, 0px -10px, 12px 12px;
  }
  70% , 85% {
      background-position:
      0px -34px, -12px -34px, 0px 12px,
      34px -12px, 0px -10px, 34px 12px;
  }
 90% , 100% {
      background-position:
      0px -34px, -12px -34px, 0px 0px,
      34px -12px, 0px 0px, 34px 12px;
  }
}
</style>