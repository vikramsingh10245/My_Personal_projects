package com.junit.testing;

import static org.assertj.core.api.Assertions.assertThat;

import org.junit.jupiter.api.Test;
import org.junit.jupiter.params.ParameterizedTest;
import org.junit.jupiter.params.provider.CsvSource;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.jdbc.EmbeddedDatabaseConnection;
import org.springframework.boot.test.autoconfigure.jdbc.AutoConfigureTestDatabase;
import org.springframework.boot.test.autoconfigure.orm.jpa.DataJpaTest;

import java.util.List;
import java.util.Optional;

@DataJpaTest
@AutoConfigureTestDatabase(connection= EmbeddedDatabaseConnection.H2) // Replace with an embedded database
public class BookRepositoryTest {

    @Autowired
    private BookRepo bookRepo;

    @ParameterizedTest
    @CsvSource({
          "vikram,this is new novl,4",
          "rohit,new novel,7"
    })
    public void testSaveBook_returnsSavedBook(String name,String summary,int rating) {

        Book book = Book.builder()
                .name(name)
                .summary(summary)
                .rating(rating)
                .build();

        Book savedBook = bookRepo.save(book);
        assertThat(savedBook).isNotNull();
        assertThat(savedBook.getBookId()).isNotNull();
        assertThat(savedBook.getBookId()).isGreaterThan(0);
        assertThat(savedBook.getName()).isEqualTo(name);
        assertThat(savedBook.getSummary()).isEqualTo(summary);
        assertThat(savedBook.getRating()).isEqualTo(rating);

    }

    @Test
    public void testFindAll_ReturnBooks(){
        Book book=Book.builder().name("harry").summary("latest book").rating(4).build();
        Book book1=Book.builder().name("Potter").summary("old book").rating(3).build();

        bookRepo.save(book);
        bookRepo.save(book1);
        List<Book> savedbooks=bookRepo.findAll();
        assertThat(savedbooks).isNotNull();
        assertThat(savedbooks.size()).isEqualTo(2);
        assertThat(savedbooks.get(0).getName()).isEqualTo(book.getName());
        assertThat(savedbooks.get(1).getSummary()).isEqualTo(book1.getSummary());


    }
    @Test
    public void testFindById_returnBook(){
        Book book=Book.builder().name("harry").summary("latest book").rating(4).build();
        Book book1=Book.builder().name("Potter").summary("old book").rating(3).build();
        bookRepo.save(book);
        bookRepo.save(book1);

        Optional<Book> savedBook=bookRepo.findById(1L);
        assertThat(savedBook).isNotNull();
        assertThat(savedBook.get().getName()).isEqualTo(book.getName());
        assertThat(savedBook.get().getSummary()).isEqualTo(book.getSummary());
    }

    @Test
    public void testFindByRating_returnBook(){
        Book book=Book.builder().name("harry").summary("latest book").rating(4).build();
        Book book1=Book.builder().name("Potter").summary("old book").rating(3).build();

        bookRepo.save(book);
        bookRepo.save(book1);
        List<Book> bk=bookRepo.findByRating(4);
        assertThat(bk).isNotNull();
        assertThat(bk.get(0).getRating()).isEqualTo(4);

    }
    @Test
    public void testDeleteById_returnNull(){
        Book book=Book.builder().name("harry").summary("latest book").rating(4).build();
        Book book1=Book.builder().name("Potter").summary("old book").rating(3).build();

        bookRepo.save(book);
        bookRepo.save(book1);

       bookRepo.deleteById(book.getBookId());
       assertThat(bookRepo.findById(book.getBookId())).isEmpty();
    }

}
