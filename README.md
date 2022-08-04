# Web server performance monitoring system
Com-Sci Project NT071-608 

## Tech Stack

- PHP, CSS, HTML, Vue.js, vue-chartjs, vuetify, Axios, Python, LineNotify

# To-do List  🔥  🔥  🔥 

## Index
- หน้า index &#10060; ไฟล์ newchart.php
- หน้า ui &#10060; ไฟล์ test-ui.php
- ทดสอบ ui ไฟล์ ui2.php
- แสดงค่าไม่สำเร็จ &#10060;
## Server
- ปุ่ม สำหรับใส่ url server &#10004; ไฟล์ add_url.php
- หน้าเลือก Server &#10060;

## Data
- ดึงข้อมูล  &#10004; 
- live data &#10004;

## Chart
- chart ของ data แต่ละตัว &#10004; ไฟล์ newchart.php
    - raw data &#10004;
    - ผลต่าง data &#10004;

## Detect
- average data &#10004;             ไฟล์ newchart.php
- detect data แต่ละตัว &#10004;

## Notify
- test to line notify &#10004;      ไฟล์ notify.php
- ปุ่ม สำหรับ ใส่ message and token &#10004;        ไฟล์ add_token.php
- Alert to line notify &#10004;


1 cron: every 5 min query
24 * 12

2 cron: 30 sec
1. rn = random number
2. check rn > 0.5
3. curl read website from server
random page

3 Attack: 1 min
