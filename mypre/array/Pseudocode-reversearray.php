FUNCTION ReverseArray(array)
    left ← 0
    right ← length(array) - 1
    
    WHILE left < right DO
        temp ← array[left]
        array[left] ← array[right]
        array[right] ← temp
        
        left ← left + 1
        right ← right - 1
    END WHILE
END FUNCTION