import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'letras',
})
export class LetrasPipe implements PipeTransform {
  transform(value: string): string {
    let aux: string = value.substring(0, 2).concat('...');
    console.log(value);
    console.log(aux);
    return aux;
  }
}
