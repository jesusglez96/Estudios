import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TragaperrasComponent } from './tragaperras/tragaperras.component';
import { TragaperraComponent } from './tragaperra/tragaperra.component';

@NgModule({
  declarations: [TragaperrasComponent, TragaperraComponent],
  imports: [CommonModule],
  exports: [TragaperrasComponent],
})
export class TragaperrasModule {}
