import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TragaperrasComponent } from './tragaperras/tragaperras/tragaperras.component';
import { ListadoComponent } from './listado/listado.component';
import { AltaComponent } from './alta/alta.component';

const routes: Routes = [
  { path: '', component: TragaperrasComponent },
  { path: 'listado_alumnos', component: ListadoComponent },
  { path: 'alta_alumno', component: AltaComponent },
  { path: '**', redirectTo: 'tragaperras', pathMatch: 'full' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
