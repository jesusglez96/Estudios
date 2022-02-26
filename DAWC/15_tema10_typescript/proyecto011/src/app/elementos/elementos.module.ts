import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CronometrosComponent } from './cronometros/cronometros.component';
import { CronometroComponent } from './cronometros/cronometro/cronometro.component';
import { DadosComponent } from './dados/dados.component';
import { DadoComponent } from './dados/dado/dado.component';
import { SelectornumericosComponent } from './selectornumericos/selectornumericos.component';
import { SelectornumericoComponent } from './selectornumericos/selectornumerico/selectornumerico.component';

@NgModule({
  declarations: [
    CronometrosComponent,
    CronometroComponent,
    DadosComponent,
    DadoComponent,
    SelectornumericoComponent,
    SelectornumericosComponent,
  ],
  imports: [CommonModule],
  exports: [CronometrosComponent, DadosComponent, SelectornumericosComponent],
})
export class ElementosModule {}
