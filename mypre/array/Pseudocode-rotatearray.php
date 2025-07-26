FUNCTION RotateArray(array, rotation)
    rotatedArray ← []
    
    FOR index FROM rotation TO length(array) - 1 DO
        rotatedArray[index - rotation] ← array[index]
    END FOR
    
    FOR index FROM 0 TO rotation - 1 DO
        rotatedArray[index + length(array) - rotation] ← array[index]
    END FOR
    
    RETURN rotatedArray
END FUNCTION