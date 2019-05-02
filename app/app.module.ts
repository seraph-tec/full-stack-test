import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { HomeComponent } from './home/home.component';
import { AppComponent } from   './app.component';

import { ComponentsModule } from './components/components.module';

@NgModule({
    imports: [
        BrowserModule,
        ComponentsModule,
    ],
    declarations: [AppComponent, HomeComponent],
    bootstrap: [AppComponent]
})

export class AppModule {} 