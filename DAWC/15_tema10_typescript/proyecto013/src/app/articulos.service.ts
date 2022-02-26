import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})
export class ArticulosService {
  constructor(private http: HttpClient) {}

  retornar() {
    return this.http.get(
      'https://api.openweathermap.org/data/2.5/weather?q=sevilla&units=metric&lang=sp&appid=db07a2dc62b855fe1f53205b91221081'
    );
  }
}
