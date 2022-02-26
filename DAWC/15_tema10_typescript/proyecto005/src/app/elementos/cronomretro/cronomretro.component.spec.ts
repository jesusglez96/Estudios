import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CronomretroComponent } from './cronomretro.component';

describe('CronomretroComponent', () => {
  let component: CronomretroComponent;
  let fixture: ComponentFixture<CronomretroComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CronomretroComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CronomretroComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
