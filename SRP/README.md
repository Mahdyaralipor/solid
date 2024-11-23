# Single Responsibility Principle یا اصل تک وظیفگی (SRP)

این اصل تأکید می‌کند که هر کلاس یا ماژول باید فقط یک دلیل برای تغییر داشته باشد. اگر یک کلاس وظایف مختلفی را انجام دهد، ممکن است تغییر در یک وظیفه باعث تأثیرات ناخواسته در وظایف دیگر شود. با تقسیم 
وظایف و مسئولیت‌ها به کلاس‌های مجزا، طراحی نرم‌افزار ساده‌تر، خواناتر و انعطاف‌پذیرتر خواهد بود.

مثال:

فرض کنید کلاسی به نام Employee دارید که اطلاعات کارمندان را مدیریت می‌کند. این کلاس شامل دو وظیفه متفاوت است:

1.مدیریت داده‌های مربوط به کارمند (مانند نام، حقوق و سمت).

2.تولید گزارش برای کارمند.

      <?php
      
      class Employee {
          public $name;
          public $salary;
      
          public function __construct($name, $salary) {
              $this->name = $name;
              $this->salary = $salary;
          }
      
          public function generateReport() {
              return "Report for {$this->name}, Salary: {$this->salary}";
          }
      }
      
      // استفاده
      $employee = new Employee("John Doe", 5000);
      echo $employee->generateReport();
#### مشکلات:

اگر بخواهید ساختار گزارش‌دهی را تغییر دهید، این تغییر ممکن است بر مدیریت اطلاعات کارمند نیز اثر بگذارد.

کلاس بیش از حد پیچیده و متصل به وظایف غیرمرتبط می‌شود.


#### راه‌حل:

وظایف را در دو کلاس مجزا تقسیم کنید:

1.مدیریت داده‌های کارمند

2.ایجاد گزارش

      <?php
      
      // کلاس مسئول مدیریت اطلاعات کارمند
      class Employee {
          public $name;
          public $salary;
      
          public function __construct($name, $salary) {
              $this->name = $name;
              $this->salary = $salary;
          }
      }
      
      // کلاس مسئول تولید گزارش
      class EmployeeReportGenerator {
          public function generate(Employee $employee) {
              return "Report for {$employee->name}, Salary: {$employee->salary}";
          }
      }
      
      // استفاده
      $employee = new Employee("John Doe", 5000);
      $reportGenerator = new EmployeeReportGenerator();
      echo $reportGenerator->generate($employee);


#### مزایا:

تغییرات در گزارش‌دهی، تأثیری بر کلاس Employee ندارد.

مسئولیت‌ها واضح و جدا از هم هستند.

تست و نگهداری نرم‌افزار آسان‌تر می‌شود.

##### این اصل از مفهوم جداسازی دغدغه‌ها (Separation of Concerns) الهام گرفته و در کنار اصول دیگر SOLID به ایجاد سیستم‌های نرم‌افزاری انعطاف‌پذیر و پایدار کمک می‌کند.
