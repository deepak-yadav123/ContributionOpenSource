var fireBase = fireBase || firebase;
var hasInit = false;
var config = {
    // apiKey: "AIzaSyAq5EuwGXS1vRpD8vdmvTQnRWHT3r8nIpA",
    // authDomain: "aimhelper-8510a.firebaseapp.com",
    // databaseURL: "https://aimhelper-8510a.firebaseio.com",
    // projectId: "aimhelper-8510a",
    // storageBucket: "aimhelper-8510a.appspot.com",
    // messagingSenderId: "43997639659"

    apiKey: "AIzaSyAYP8kFer_grz_x2Y00-jN5DFwHe_EKGk0",
    authDomain: "auth-df2cc.firebaseapp.com",
    projectId: "auth-df2cc",
    storageBucket: "auth-df2cc.appspot.com",
    messagingSenderId: "1024763179280",
    appId: "1:1024763179280:web:f10b778aea3662c650f595"
  };
if(!hasInit){
    firebase.initializeApp(config);
    hasInit = true;
}


