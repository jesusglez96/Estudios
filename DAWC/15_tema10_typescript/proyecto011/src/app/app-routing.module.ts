import { NgModule, Component } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { CronometrosComponent } from './elementos/cronometros/cronometros.component';
import { DadosComponent } from './elementos/dados/dados.component';
import { SelectornumericosComponent } from './elementos/selectornumericos/selectornumericos.component';

const routes: Routes = [
  {
    path: 'dados',
    component: DadosComponent,
  },
  {
    path: 'cronometro',
    component: CronometrosComponent,
  },
  {
    path: 'selectornumerico',
    component: SelectornumericosComponent,
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
