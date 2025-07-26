FUNCTION FindLargestNumber(array)
    largest ← array[0]
    
    FOR each number IN array DO
        IF number > largest THEN
            largest ← number
        END IF
    END FOR

    RETURN largest
END FUNCTION