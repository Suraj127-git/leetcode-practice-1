FUNCTION ContainsDuplicate(array)
    FOR each number IN array DO
        FOR each otherNumber IN array DO
            IF number = otherNumber THEN
                RETURN TRUE
            END IF
        END FOR
    END FOR

    RETURN FALSE
END FUNCTION