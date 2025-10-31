// src/app/book-item/book-item.component.ts
import { Component, Input } from '@angular/core'; // 1. Precisa do Input
import { CommonModule } from '@angular/common';
import { Book } from '../book.model'; // 2. Importa nosso "formato"

@Component({
  selector: 'app-book-item',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './book-item.html',
  styleUrl: './book-item.css'
})
export class BookItemComponent {

  // 3. Esta linha "abre a porta" para o componente receber um livro
  @Input() book?: Book;

}