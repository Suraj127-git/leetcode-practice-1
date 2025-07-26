FUNCTION LinearSearch(array, target)
    FOR index FROM 0 TO length(array) - 1 DO
        IF array[index] = target THEN
            RETURN index
        END IF
    END FOR

    RETURN -1
END FUNCTION