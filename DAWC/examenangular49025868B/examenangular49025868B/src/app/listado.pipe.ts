import { Pipe, PipeTransform } from '@angular/core';
import { Alumno } from './alumno.interface';

@Pipe({
  name: 'listado',
})
export class ListadoPipe implements PipeTransform {
  transform(res: any[]): Alumno[] {
    console.log(res);
    let alumnos: Alumno[] = [];
    res.forEach((element) => {
      alumnos.push({
        id: element.id,
        nombre: element.nombre,
        mail: element.mail,
        curso: element.curso,
        repetidor: element.repetidor == 1 ? 'Si' : 'No',
        observaciones: element.observaciones,
      });
    });
    return alumnos;
  }
}
