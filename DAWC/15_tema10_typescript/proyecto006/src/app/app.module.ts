import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { SelectornumericoComponentComponent } from './selectornumerico-component/selectornumerico-component.component';

@NgModule({
  declarations: [
    AppComponent,
    SelectornumericoComponentComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
