func lengthOfLongestSubstring(s string) int {
	n := len(s)
	seen := make(map[byte]int)
	left := 0
	maxLen := 0

	for right := 0; right < n; right++ {
		char := s[right]

		if idx, ok := seen[char]; ok && idx >= left {
			left = idx + 1
		}

		seen[char] = right
		if right-left+1 > maxLen {
			maxLen = right - left + 1
		}
	}

	return maxLen
}