FUNCTION TwoSum(array, target)
    FOR each number IN array DO
        FOR each otherNumber IN array DO
            IF number + otherNumber = target THEN
                RETURN number, otherNumber
            END IF
        END FOR
    END FOR