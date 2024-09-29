package com.junit.testing;

import jakarta.persistence.*;
import lombok.*;

@Entity
@Table(name="Book_card")
@Data
@NoArgsConstructor
@AllArgsConstructor
@Builder
public class Book {
    @Id
    @GeneratedValue(strategy= GenerationType.IDENTITY)
    private Long bookId;
    @NonNull
    private String name;

    @NonNull
    private String summary;
    private int rating;
}
