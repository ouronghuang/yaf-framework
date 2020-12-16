### 使用

```php
use Orh\Yaf\View\View;

$dispatcher->setView(View::smarty());
```

### 支持的引擎

- Smarty

### Smarty

Smarty 需要在 app.ini 添加的配置

```
smarty.templateDir = APP_PATH "/resources/views/"
smarty.compileDir = APP_PATH "/storage/smarty/compiles/"
smarty.configDir = APP_PATH "/storage/smarty/configs/"
smarty.cacheDir = APP_PATH "/storage/smarty/caches/"
```
