import { swiperInit } from "./top_carousel.js";
// Initialize Firebase
const firebaseConfig = {
  apiKey: "AIzaSyAfpME9UV0GVQdBzMwzXdaMCbCcGXHMuAw",
  authDomain: "imgtable-32755.firebaseapp.com",
  projectId: "imgtable-32755",
  storageBucket: "imgtable-32755.appspot.com",
  messagingSenderId: "997877715529",
  appId: "1:997877715529:web:5738d0822c3c6787436598"
};

firebase.initializeApp(firebaseConfig);

var db = firebase.firestore();
db.settings({
  timestampsInSnapshots: true
});

var collection = db.collection('carousel');
var dataList = [];
var target = document.getElementById('js-slideInclude');
// if(target==null) {console.log("a");return} ;
collection.where("status", "==", true).get().then(snapshot => {
  snapshot.forEach(data => {
    dataList.push(data.data())
  });
  return dataList;
}).then(dataList => {
  console.log(dataList.length== 0);
  if (dataList.length == 0) {
    //例外処理なので　あまりきちんと考慮しないが崩れない程度に調整
    document.querySelectorAll(".swiper-pagination").forEach(ele=>ele.style.display="none");
    document.querySelectorAll(".swiper-button-next").forEach(ele=>ele.style.display="none");
    document.querySelectorAll(".swiper-button-prev").forEach(ele=>ele.style.display="none");

  } else {
    var ele = "";
    dataList.forEach(data => {
      ele = ele + '<div class="swiper-slide"><img src="' +
        data.imgPath + '" alt="'+data.alt+'"/></div>'
    })
    target.innerHTML = ele;
    swiperInit();
  }
});




