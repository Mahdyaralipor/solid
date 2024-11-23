### 5. **D - اصل وابستگی معکوس (Dependency Inversion Principle - DIP)**

**تعریف:** کلاس‌های سطح بالا نباید به کلاس‌های سطح پایین وابسته باشند. هر دو باید به انتزاع‌ها وابسته باشند (مانند رابط‌ها). همچنین، جزئیات باید به انتزاع‌ها وابسته باشند نه بالعکس.

**مثال:**
فرض کنید یک کلاس `LightBulb` دارید که توسط یک کلاس `Switch` کنترل می‌شود. طبق اصل DIP، به جای اینکه `Switch` مستقیماً به `LightBulb` وابسته باشد، باید به رابط‌ها یا انتزاع‌ها وابسته باشد.

```php
interface Switchable {
    public function turnOn();
    public function turnOff();
}

class LightBulb implements Switchable {
    public function turnOn() {
        echo "The light is on!";
    }

    public function turnOff() {
        echo "The light is off!";
    }
}

class Switch {
    private $device;

    public function __construct(Switchable $device) {
        $this->device = $device;
    }

    public function operate() {
        $this->device->turnOn();
    }
}
