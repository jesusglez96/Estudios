import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})
export class AlumnosService {
  constructor(private http: HttpClient) {}

  index(): any {
    return this.http.get(
      'http://localhost//Estudios/DAWC/examenangular_api/all.php'
    );
  }

  add(body: any): any {
    return this.http.post(
      'http://localhost//Estudios/DAWC/examenangular_api/alta.php',
      body
    );
  }
}
