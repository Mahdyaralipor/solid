### 4. I - اصل تفکیک رابط‌ها (Interface Segregation Principle - ISP)

**تعریف**:  
یک کلاس نباید مجبور باشد به متدهایی از یک رابط (interface) که استفاده نمی‌کند، وابسته باشد.

**مثال**:  
فرض کنید یک رابط به نام `Animal` داریم که متدهایی مانند `fly()` و `swim()` را دارد. اگر یک کلاس `Dog` این رابط را پیاده‌سازی کند، ممکن است نیاز نباشد که متد `fly()` را پیاده‌سازی کند، چون سگ‌ها پرواز نمی‌کنند. طبق اصل ISP، بهتر است رابط‌ها را به چند رابط خاص‌تر تقسیم کنیم.

```php
interface CanFly {
    public function fly();
}

interface CanSwim {
    public function swim();
}

class Dog implements CanSwim {
    public function swim() {
        echo "I can swim!";
    }
}

class Bird implements CanFly {
    public function fly() {
        echo "I can fly!";
    }
}
