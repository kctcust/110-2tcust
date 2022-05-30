import hashlib

text = 'Python Programming'
# 計算 MD5 雜湊值
hash_value = hashlib.md5(text.encode())
# 取得 MD5 16進位雜湊值(位元數/4)
h = hash_value.hexdigest()
print('md5 hash: ' + h)
print('=================')
# 計算 SHA256 雜湊值
hash_value2 = hashlib.sha256(text.encode())
# 取得 SHA256 16進位雜湊值(位元數/4)
h2 = hash_value2.hexdigest()
print('SHA256 hash: ' + h2)