import { platformBrowserDynamic } from "@angular/platform-browser-dynamic";
import { AppModule } from './app.module';

// faz o bootstrap do modulo pelo dynamic
const platform = platformBrowserDynamic();
platform.bootstrapModule(AppModule)