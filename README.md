# Web server performance monitoring system
Com-Sci Project NT071-608 


## หลักการทำงาน
ทำการดึงข้อมูลสถานะของ Server จาก Server Status (Apache Server) มาแสดงผลในรูปแบบของกราฟ เพื่อให้ผู้ดูแลระบบสามารถตรวจสอบสถานะได้ง่ายดายมากขึ้น นอกจากนี้ หากมีค่าข้อมูลที่ผิดปกติหรือคาดว่าถูกผู้ไม่หวังดีโจมตีด้วย HTTP Flood ระบบสามารถแจ้งเตือนไปยังผู้ดูแลระบบได้ผ่าน Line Notify
## Tech Stack

- PHP, CSS, HTML, Vue.js, vue-chartjs, vuetify, Axios, Python, LineNotify
<p>
  <img alt="HTML5" src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white" /> 
  <img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" />
  <img alt="JavaScript" src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)" /> 
  <img alt="Vue.js" src="https://img.shields.io/badge/vuejs-%2335495e.svg?style=for-the-badge&logo=vuedotjs&logoColor=%234FC08D" /> 
  <img alt="Vuetify" src="https://img.shields.io/badge/Vuetify-1867C0?style=for-the-badge&logo=vuetify&logoColor=AEDDFF" /> 
  <img alt="Chart.js" src="https://img.shields.io/badge/chart.js-F5788D.svg?style=for-the-badge&logo=chart.js&logoColor=white" /> 
<p>

## Server Status Data 
![image (2)](https://user-images.githubusercontent.com/87747635/183032008-a9114dd3-b43c-47b1-9bf9-7b8eacf43992.png)
![image (1)](https://user-images.githubusercontent.com/87747635/183032013-5d1beee0-97b6-40cb-b317-2304a81e616d.png)

## Server Status Chart 
![image (4)](https://user-images.githubusercontent.com/87747635/183031974-4e38734b-253a-4ded-8f9b-4c1a169b0f00.png)

## Alert to LineNotify
![image (3)](https://user-images.githubusercontent.com/87747635/183031992-d7e1b2d1-a302-409c-be04-770c6999f8fd.png)
