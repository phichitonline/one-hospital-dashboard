<p align="center"><a href="https://one.ppho.go.th" target="_blank"><img src="https://raw.githubusercontent.com/phichitonline/one-hospital-dashboard/main/public/assets/images/mis-hosinfo-logo-full.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">

</p>

## About One Province One Hospital

ระบบจัดการข้อมูลโรงพยาบาล สำหรับสำนักงานสาธารณสุขจังหวัด

- ข้อมูลและสถิติ Dashboard

## การติดตั้งใช้งาน

พัฒนาด้วย Laravel framework 9 + Livewire 2 รองรับ PHP เวอร์ชั่น 8.1 ขึ้นไป

1. ติดตั้งด้วยคำสั่ง git clone https://github.com/phichitonline/one-hospital-dashboard.git
2. ติดตั้ง Library ด้วยคำสั่ง composer update
3. สร้างฐานข้อมูล
4. copy ไฟล์ .env.example -> .env ตั้งค่าเชื่อมต่อฐานข้อมูล
5. php artisan key:generate
6. สร้างตารางข้อมูลด้วยคำสั่ง php artisan migrate
7. chmod 777 folder ต่อไปนี้ storage, bootstrap/cache

## License

โดย ณัฐพงศ์ เครือเทศ (Dr.GHOST)
Tel/LineID 0619921666

โรงพยาบาลสมเด็จพระยุพราชตะพานหิน จ.พิจิตร

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
